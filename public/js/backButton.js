 history.pushState(null, null, null);
 window.addEventListener('popstate', (e) => {
     e.preventDefault();

     history.pushState(null, null, null);
 });
