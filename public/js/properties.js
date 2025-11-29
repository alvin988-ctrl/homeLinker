

    function go(path){ window.location.href = path }
    function performSearch(){ const q = document.getElementById('q').value.trim(); if(!q) return; window.location.href = '/search?q='+encodeURIComponent(q) }
    function reportBroken(){ alert('Thanks — the team has been notified.') }

    document.addEventListener('keydown', (e)=>{
      if(e.key === 'Escape'){ const s = document.getElementById('q'); s.focus(); s.select(); }
    })



function togglePassword() {
    const passwordField = document.getElementById("passwordField");
    const eyeIcon = document.getElementById("eyeIcon");

    if (passwordField.type === "password") {
        passwordField.type = "text";

        eyeIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.97 9.97 0 013.276-4.568M9.88 9.88a3 3 0 104.24 4.24"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 3l18 18"/>
        `;
    } else {
        passwordField.type = "password";

        eyeIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
        `;
    }
}
