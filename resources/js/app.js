const passwordInput = document.getElementById('password');
const strengthBar = document.getElementById('strengthBar');
const strengthText = document.getElementById('strengthText');

passwordInput.addEventListener('input', () => {
    const largo = passwordInput.value.length;

    if (largo === 0) {
        // Estado inicial sin caracteres
        strengthBar.style.width = '0%';
        strengthText.innerText = 'Introducir caracteres';
        strengthText.className = "text-[10px] font-bold uppercase tracking-wider text-slate-400 mt-1 block ml-1";
    } else if (largo >= 1 && largo <= 6) {
        // 1 a 6 caracteres: Insegura (Rojo)
        strengthBar.style.width = '33%';
        strengthBar.style.backgroundColor = '#ef4444'; 
        strengthText.innerText = 'Insegura';
        strengthText.className = "text-[10px] font-bold uppercase tracking-wider text-rose-500 mt-1 block ml-1";
    } else if (largo >= 7 && largo <= 12) {
        // 7 a 12 caracteres: Media (Amarillo)
        strengthBar.style.width = '66%';
        strengthBar.style.backgroundColor = '#f59e0b'; 
        strengthText.innerText = 'Media';
        strengthText.className = "text-[10px] font-bold uppercase tracking-wider text-amber-500 mt-1 block ml-1";
    } else if (largo >= 13) {
        // 13 a más caracteres: Segura (Verde)
        strengthBar.style.width = '100%';
        strengthBar.style.backgroundColor = '#10b981'; 
        strengthText.innerText = 'Segura';
        strengthText.className = "text-[10px] font-bold uppercase tracking-wider text-emerald-500 mt-1 block ml-1";
    }
});