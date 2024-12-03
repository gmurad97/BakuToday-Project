(() => {
    'use strict'
  
    const getStoredTheme = () => localStorage.getItem('theme')
    const setStoredTheme = theme => localStorage.setItem('theme', theme)
  
    const getPreferredTheme = () => {
      const storedTheme = getStoredTheme()
      if (storedTheme) {
        return storedTheme
      } else {
        setStoredTheme(window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
      }
  
      return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
    }
  
    const setTheme = theme => {
      document.documentElement.setAttribute('data-bs-theme', theme)
    }
  
    setTheme(getPreferredTheme())

    const showActiveTheme = (theme) => {
      const themeSwitcher = document.querySelector('#theme-switcher')

      if (!themeSwitcher) {
        return
      }

      const box = document.querySelector('.box');
      const logosLight = document.querySelectorAll('.logo-light');
      const logosDark = document.querySelectorAll('.logo-dark');

      if(theme === 'dark') {
        box.classList.remove('light')
        box.classList.add('dark')
        logosLight.forEach(logo => {
          logo.classList.remove('d-block')
          logo.classList.add('d-none');
        });
        logosDark.forEach(logo => {
          logo.classList.remove('d-none');
          logo.classList.add('d-block');          
        });

      }
      if(theme ==='light') {
        box.classList.remove('dark')
        box.classList.add('light')
        logosLight.forEach(logo => {
          logo.classList.remove('d-none')
          logo.classList.add('d-block');
        });
        logosDark.forEach(logo => {
          logo.classList.remove('d-block');
          logo.classList.add('d-none');
          
        });
      }

    }
  
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
      const storedTheme = getStoredTheme()
      if (storedTheme !== 'light' && storedTheme !== 'dark') {
        setTheme(getPreferredTheme())
      }
    })
  
    window.addEventListener('DOMContentLoaded', () => {
      showActiveTheme(getPreferredTheme())

      const themeSwitcher = document.querySelector('#theme-switcher')

      if (getStoredTheme() == 'dark') {
        themeSwitcher.checked = true;
      } else if (getStoredTheme() == 'light') {
        themeSwitcher.checked = false;
      }
  
      themeSwitcher.addEventListener('change', function() {
        const theme = this.checked ? 'dark' : 'light'
        setStoredTheme(theme)
        setTheme(theme)
        showActiveTheme(theme)
      })

    })


  })()