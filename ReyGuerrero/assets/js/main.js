/**
 * REY GUERRERO - MENÚ DIGITAL INMERSIVO "MAREJADA"
 * JavaScript Principal - Animaciones, Parallax y Microinteracciones
 *
 * El menú que se siente - Alta cocina del Pacífico colombiano
 */

(function() {
  'use strict';

  // ═══════════════════════════════════════════════════════════
  // CONFIGURACIÓN GLOBAL
  // ═══════════════════════════════════════════════════════════

  const CONFIG = {
    parallax: {
      enabled: true,
      smoothing: 0.1,
      maxOffset: 100
    },
    animations: {
      threshold: 0.15,
      rootMargin: '0px 0px -50px 0px'
    },
    floaters: {
      count: 12,
      types: ['leaf', 'spice', 'drop']
    }
  };

  // Estado global
  const state = {
    scrollY: 0,
    targetScrollY: 0,
    isScrolling: false,
    isMobile: window.innerWidth < 768,
    reducedMotion: window.matchMedia('(prefers-reduced-motion: reduce)').matches
  };

  // ═══════════════════════════════════════════════════════════
  // UTILIDADES
  // ═══════════════════════════════════════════════════════════

  const utils = {
    // Throttle function para optimizar eventos de scroll
    throttle(func, limit) {
      let inThrottle;
      return function(...args) {
        if (!inThrottle) {
          func.apply(this, args);
          inThrottle = true;
          setTimeout(() => inThrottle = false, limit);
        }
      };
    },

    // Debounce function
    debounce(func, wait) {
      let timeout;
      return function(...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), wait);
      };
    },

    // Lerp para animaciones suaves
    lerp(start, end, factor) {
      return start + (end - start) * factor;
    },

    // Clamp value between min and max
    clamp(value, min, max) {
      return Math.min(Math.max(value, min), max);
    },

    // Get random number in range
    random(min, max) {
      return Math.random() * (max - min) + min;
    },

    // Check if element is in viewport
    isInViewport(element, offset = 0) {
      const rect = element.getBoundingClientRect();
      return (
        rect.top <= (window.innerHeight - offset) &&
        rect.bottom >= offset
      );
    }
  };

  // ═══════════════════════════════════════════════════════════
  // NAVEGACIÓN
  // ═══════════════════════════════════════════════════════════

  const Navigation = {
    nav: null,
    toggle: null,
    mobileMenu: null,
    links: null,

    init() {
      this.nav = document.querySelector('.nav');
      this.toggle = document.querySelector('.nav__toggle');
      this.mobileMenu = document.querySelector('.mobile-menu');
      this.links = document.querySelectorAll('.nav__link, .mobile-menu__link');

      if (!this.nav) return;

      this.bindEvents();
      this.updateOnScroll();
    },

    bindEvents() {
      // Toggle mobile menu
      if (this.toggle && this.mobileMenu) {
        this.toggle.addEventListener('click', () => this.toggleMobileMenu());

        const closeBtn = this.mobileMenu.querySelector('.mobile-menu__close');
        if (closeBtn) {
          closeBtn.addEventListener('click', () => this.closeMobileMenu());
        }

        // Close on link click
        this.mobileMenu.querySelectorAll('.mobile-menu__link').forEach(link => {
          link.addEventListener('click', () => this.closeMobileMenu());
        });
      }

      // Smooth scroll for nav links
      this.links.forEach(link => {
        link.addEventListener('click', (e) => this.handleNavClick(e, link));
      });

      // Update nav on scroll
      window.addEventListener('scroll', utils.throttle(() => this.updateOnScroll(), 100));
    },

    toggleMobileMenu() {
      this.mobileMenu.classList.toggle('mobile-menu--open');
      document.body.style.overflow = this.mobileMenu.classList.contains('mobile-menu--open') ? 'hidden' : '';
    },

    closeMobileMenu() {
      this.mobileMenu.classList.remove('mobile-menu--open');
      document.body.style.overflow = '';
    },

    handleNavClick(e, link) {
      const href = link.getAttribute('href');
      if (href && href.startsWith('#')) {
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
          const offset = this.nav.offsetHeight + 20;
          const targetPosition = target.getBoundingClientRect().top + window.scrollY - offset;
          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });
        }
      }
    },

    updateOnScroll() {
      if (window.scrollY > 100) {
        this.nav.classList.add('nav--scrolled');
      } else {
        this.nav.classList.remove('nav--scrolled');
      }

      // Update active link based on scroll position
      this.updateActiveLink();
    },

    updateActiveLink() {
      const sections = document.querySelectorAll('.menu-section[id]');
      const scrollPos = window.scrollY + 200;

      sections.forEach(section => {
        const top = section.offsetTop;
        const height = section.offsetHeight;
        const id = section.getAttribute('id');

        if (scrollPos >= top && scrollPos < top + height) {
          this.links.forEach(link => {
            link.classList.remove('nav__link--active');
            if (link.getAttribute('href') === `#${id}`) {
              link.classList.add('nav__link--active');
            }
          });
        }
      });
    }
  };

  // ═══════════════════════════════════════════════════════════
  // PARALLAX SYSTEM
  // ═══════════════════════════════════════════════════════════

  const Parallax = {
    layers: [],
    rafId: null,

    init() {
      if (state.reducedMotion || !CONFIG.parallax.enabled) return;

      this.layers = document.querySelectorAll('[data-parallax]');
      if (this.layers.length === 0) return;

      this.bindEvents();
      this.startAnimation();
    },

    bindEvents() {
      window.addEventListener('scroll', () => {
        state.targetScrollY = window.scrollY;
        if (!state.isScrolling) {
          state.isScrolling = true;
        }
      }, { passive: true });
    },

    startAnimation() {
      const animate = () => {
        // Smooth scroll interpolation
        state.scrollY = utils.lerp(state.scrollY, state.targetScrollY, CONFIG.parallax.smoothing);

        // Update CSS custom property for pure CSS parallax
        document.documentElement.style.setProperty('--scroll-y', `${state.scrollY}px`);

        // Update each parallax layer
        this.layers.forEach(layer => {
          const speed = parseFloat(layer.dataset.parallax) || 0.5;
          const direction = layer.dataset.parallaxDirection || 'vertical';
          const offset = state.scrollY * speed;

          if (direction === 'vertical') {
            layer.style.transform = `translateY(${offset}px)`;
          } else {
            layer.style.transform = `translateX(${offset}px)`;
          }
        });

        // Check if still scrolling
        if (Math.abs(state.scrollY - state.targetScrollY) < 0.5) {
          state.isScrolling = false;
        }

        this.rafId = requestAnimationFrame(animate);
      };

      this.rafId = requestAnimationFrame(animate);
    },

    destroy() {
      if (this.rafId) {
        cancelAnimationFrame(this.rafId);
      }
    }
  };

  // ═══════════════════════════════════════════════════════════
  // INTERSECTION OBSERVER - ANIMACIONES DE ENTRADA
  // ═══════════════════════════════════════════════════════════

  const ScrollAnimations = {
    observer: null,

    init() {
      if (state.reducedMotion) {
        // Show all elements immediately if reduced motion is preferred
        document.querySelectorAll('.fade-in-up, .dish-card, .stagger-children').forEach(el => {
          el.classList.add('is-visible');
        });
        return;
      }

      this.createObserver();
      this.observeElements();
    },

    createObserver() {
      this.observer = new IntersectionObserver(
        (entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');

              // Trigger stagger animation for children
              if (entry.target.classList.contains('stagger-children')) {
                this.animateStaggerChildren(entry.target);
              }

              // Unobserve after animation
              this.observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: CONFIG.animations.threshold,
          rootMargin: CONFIG.animations.rootMargin
        }
      );
    },

    observeElements() {
      const elements = document.querySelectorAll('.fade-in-up, .dish-card, .stagger-children, .section-header');
      elements.forEach(el => this.observer.observe(el));
    },

    animateStaggerChildren(parent) {
      const children = parent.children;
      Array.from(children).forEach((child, index) => {
        setTimeout(() => {
          child.style.opacity = '1';
          child.style.transform = 'translateY(0)';
        }, index * 100);
      });
    }
  };

  // ═══════════════════════════════════════════════════════════
  // ELEMENTOS FLOTANTES
  // ═══════════════════════════════════════════════════════════

  const FloatingElements = {
    elements: [],

    init() {
      if (state.reducedMotion || state.isMobile) return;

      const containers = document.querySelectorAll('.menu-section__floaters');
      containers.forEach(container => this.createFloaters(container));
    },

    createFloaters(container) {
      const section = container.closest('.menu-section');
      const sectionClass = section ? section.className : '';

      // Determine floater type based on section
      let types = ['leaf', 'spice'];
      if (sectionClass.includes('corriente')) {
        types = ['drop', 'spice'];
      } else if (sectionClass.includes('fuego')) {
        types = ['spice'];
      } else if (sectionClass.includes('ritual')) {
        types = ['leaf', 'drop'];
      }

      for (let i = 0; i < CONFIG.floaters.count; i++) {
        const floater = document.createElement('div');
        const type = types[Math.floor(Math.random() * types.length)];

        floater.className = `floater floater--${type}`;
        floater.style.cssText = `
          left: ${utils.random(5, 95)}%;
          top: ${utils.random(10, 90)}%;
          animation-delay: ${utils.random(0, 5)}s;
          animation-duration: ${utils.random(4, 8)}s;
          opacity: ${utils.random(0.05, 0.2)};
          transform: scale(${utils.random(0.5, 1.5)}) rotate(${utils.random(0, 360)}deg);
        `;

        container.appendChild(floater);
        this.elements.push(floater);
      }
    },

    destroy() {
      this.elements.forEach(el => el.remove());
      this.elements = [];
    }
  };

  // ═══════════════════════════════════════════════════════════
  // HERO ANIMATIONS
  // ═══════════════════════════════════════════════════════════

  const HeroAnimations = {
    init() {
      const hero = document.querySelector('.hero');
      if (!hero) return;

      this.animateEntrance(hero);
      this.createWaves(hero);
    },

    animateEntrance(hero) {
      const elements = hero.querySelectorAll('.hero__logo, .hero__title, .hero__subtitle, .hero__tagline, .hero__cta');

      elements.forEach((el, index) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';

        setTimeout(() => {
          el.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
          el.style.opacity = '1';
          el.style.transform = 'translateY(0)';
        }, 300 + (index * 150));
      });
    },

    createWaves(hero) {
      const wavesContainer = hero.querySelector('.hero__waves');
      if (!wavesContainer || state.reducedMotion) return;

      // Waves are created via CSS, this just ensures the container exists
    }
  };

  // ═══════════════════════════════════════════════════════════
  // MICROINTERACCIONES
  // ═══════════════════════════════════════════════════════════

  const Microinteractions = {
    init() {
      this.initIngredientHover();
      this.initImageHover();
      this.initButtonEffects();
    },

    initIngredientHover() {
      const ingredients = document.querySelectorAll('.dish-card__ingredient');

      ingredients.forEach(ingredient => {
        ingredient.addEventListener('mouseenter', () => {
          if (state.reducedMotion) return;
          ingredient.style.transform = 'scale(1.05)';
        });

        ingredient.addEventListener('mouseleave', () => {
          ingredient.style.transform = 'scale(1)';
        });
      });
    },

    initImageHover() {
      const images = document.querySelectorAll('.dish-card__image-wrapper');

      images.forEach(wrapper => {
        const image = wrapper.querySelector('.dish-card__image');
        if (!image) return;

        wrapper.addEventListener('mousemove', (e) => {
          if (state.reducedMotion || state.isMobile) return;

          const rect = wrapper.getBoundingClientRect();
          const x = (e.clientX - rect.left) / rect.width - 0.5;
          const y = (e.clientY - rect.top) / rect.height - 0.5;

          image.style.transform = `scale(1.05) translate(${x * 10}px, ${y * 10}px)`;
        });

        wrapper.addEventListener('mouseleave', () => {
          image.style.transform = 'scale(1) translate(0, 0)';
        });
      });
    },

    initButtonEffects() {
      const buttons = document.querySelectorAll('.hero__cta, .dish-card__action');

      buttons.forEach(button => {
        button.addEventListener('mouseenter', () => {
          if (state.reducedMotion) return;
          button.style.transform = 'translateY(-2px)';
        });

        button.addEventListener('mouseleave', () => {
          button.style.transform = 'translateY(0)';
        });
      });
    }
  };

  // ═══════════════════════════════════════════════════════════
  // CURSOR PERSONALIZADO (OPCIONAL - DESKTOP)
  // ═══════════════════════════════════════════════════════════

  const CustomCursor = {
    cursor: null,
    cursorDot: null,

    init() {
      if (state.isMobile || state.reducedMotion) return;

      this.createCursor();
      this.bindEvents();
    },

    createCursor() {
      this.cursor = document.createElement('div');
      this.cursor.className = 'custom-cursor';
      this.cursor.innerHTML = '<div class="custom-cursor__dot"></div>';
      document.body.appendChild(this.cursor);

      // Add styles dynamically
      const style = document.createElement('style');
      style.textContent = `
        .custom-cursor {
          position: fixed;
          width: 40px;
          height: 40px;
          border: 2px solid var(--color-coral-vivo);
          border-radius: 50%;
          pointer-events: none;
          z-index: 9999;
          transform: translate(-50%, -50%);
          transition: transform 0.15s ease-out, opacity 0.3s ease;
          opacity: 0;
          mix-blend-mode: difference;
        }
        .custom-cursor__dot {
          position: absolute;
          top: 50%;
          left: 50%;
          width: 6px;
          height: 6px;
          background: var(--color-coral-vivo);
          border-radius: 50%;
          transform: translate(-50%, -50%);
        }
        .custom-cursor--active {
          transform: translate(-50%, -50%) scale(1.5);
        }
        body:hover .custom-cursor {
          opacity: 1;
        }
      `;
      document.head.appendChild(style);
    },

    bindEvents() {
      document.addEventListener('mousemove', (e) => {
        this.cursor.style.left = e.clientX + 'px';
        this.cursor.style.top = e.clientY + 'px';
      });

      // Hover effect on interactive elements
      const interactives = document.querySelectorAll('a, button, .dish-card, .dish-card__ingredient');
      interactives.forEach(el => {
        el.addEventListener('mouseenter', () => this.cursor.classList.add('custom-cursor--active'));
        el.addEventListener('mouseleave', () => this.cursor.classList.remove('custom-cursor--active'));
      });
    }
  };

  // ═══════════════════════════════════════════════════════════
  // SMOOTH SCROLL REVEAL
  // ═══════════════════════════════════════════════════════════

  const SmoothReveal = {
    init() {
      // Add reveal class to sections
      const sections = document.querySelectorAll('.menu-section');
      sections.forEach(section => {
        section.classList.add('reveal-section');
      });
    }
  };

  // ═══════════════════════════════════════════════════════════
  // PRELOADER
  // ═══════════════════════════════════════════════════════════

  const Preloader = {
    init() {
      const preloader = document.querySelector('.preloader');
      if (!preloader) return;

      window.addEventListener('load', () => {
        setTimeout(() => {
          preloader.classList.add('preloader--hidden');
          document.body.classList.remove('is-loading');

          setTimeout(() => {
            preloader.remove();
          }, 500);
        }, 500);
      });
    }
  };

  // ═══════════════════════════════════════════════════════════
  // RESIZE HANDLER
  // ═══════════════════════════════════════════════════════════

  const ResizeHandler = {
    init() {
      window.addEventListener('resize', utils.debounce(() => {
        state.isMobile = window.innerWidth < 768;

        // Reinitialize mobile-specific features
        if (state.isMobile) {
          FloatingElements.destroy();
        }
      }, 250));
    }
  };

  // ═══════════════════════════════════════════════════════════
  // INICIALIZACIÓN
  // ═══════════════════════════════════════════════════════════

  const App = {
    init() {
      // Check for reduced motion preference
      state.reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

      // Initialize all modules
      Preloader.init();
      Navigation.init();
      HeroAnimations.init();
      ScrollAnimations.init();
      Parallax.init();
      FloatingElements.init();
      Microinteractions.init();
      SmoothReveal.init();
      ResizeHandler.init();

      // Optional: Custom cursor (only on desktop)
      // CustomCursor.init();

      console.log('🌊 Rey Guerrero Menu - MAREJADA initialized');
    }
  };

  // Start the app when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => App.init());
  } else {
    App.init();
  }

  // Expose to global scope for PHP integration
  window.ReyGuerreroMenu = {
    refresh: () => {
      ScrollAnimations.init();
      FloatingElements.init();
    },
    state: state
  };

})();
