'use client';

import { useEffect, useRef } from 'react';

// Add TypeScript declaration for MathJax on the window object
declare global {
  interface Window {
    MathJax?: any;
  }
}

export default function MathJaxScript() {
  const scriptLoaded = useRef(false);

  useEffect(() => {
    // Prevent multiple loads
    if (scriptLoaded.current || window.MathJax) {
      return;
    }
    
    scriptLoaded.current = true;
    
    // Load MathJax 2.7 with minimal configuration
    const script = document.createElement('script');
    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.9/MathJax.js?config=TeX-MML-AM_CHTML';
    script.async = true;
    script.id = 'MathJax-script';
    
    // Add a simple configuration
    window.MathJax = {
      tex2jax: {
        inlineMath: [['$', '$']],
        displayMath: [['$$', '$$']],
        processEscapes: true,
      },
      showMathMenu: false,
      messageStyle: 'none'
    };
    
    document.head.appendChild(script);
    
    // No cleanup needed as MathJax should persist
  }, []);
  
  return null;
}