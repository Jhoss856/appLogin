<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGA | Registro de Estudiantes</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght=300;400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="app.css">
</head>
<body class="bg-cover bg-center min-h-screen flex items-center justify-center p-0 sm:p-6 relative" 
      style="background-image: url('https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=1920&auto=format&fit=crop');">
    
    <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-xs pointer-events-none"></div>

    <div class="bg-white w-full max-w-5xl min-h-[600px] flex flex-col md:flex-row rounded-none sm:rounded-3xl shadow-2xl overflow-hidden border border-white/20 relative z-10 animate-fade-in">
        
        <div class="w-full md:w-1/2 bg-emerald-600 relative p-12 flex flex-col justify-center text-white">
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20 pointer-events-none">
                <div class="absolute -top-24 -left-24 w-96 h-96 rounded-full bg-white blur-3xl"></div>
                <div class="absolute -bottom-24 -right-24 w-80 h-80 rounded-full bg-emerald-400 blur-3xl"></div>
            </div>

            <div class="relative z-10 flex flex-col items-center text-center md:text-left md:items-start">
                <h2 class="text-4xl font-bold leading-tight mb-5">Bienvenido a tu futuro académico.</h2>
                <p class="text-emerald-100 text-lg font-light leading-relaxed mb-8">
                    Tu camino hacia el éxito profesional empieza aquí. Conéctate con una infraestructura diseñada para impulsar tu potencial, simplificar tus procesos académicos y acompañarte paso a paso en el desarrollo de tu carrera.
                </p>

                <div class="flex flex-col items-center md:items-start gap-4 mt-2">
                    <div class="flex items-center justify-center -space-x-5 relative py-4">
                        <div class="w-20 h-20 rounded-full border-4 border-emerald-600 overflow-hidden shadow-xl transform hover:scale-105 transition-all bg-slate-100">
                            <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=256&auto=format&fit=crop" alt="Estudiante">
                        </div>
                        <div class="w-24 h-24 rounded-full border-4 border-emerald-600 overflow-hidden shadow-2xl transform hover:scale-105 transition-all relative z-10 bg-slate-100">
                            <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=256&auto=format&fit=crop" alt="Estudiante">
                        </div>
                        <div class="w-20 h-20 rounded-full border-4 border-emerald-600 overflow-hidden shadow-xl transform hover:scale-105 transition-all bg-slate-100">
                            <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=256&auto=format&fit=crop" alt="Estudiante">
                        </div>
                    </div>
                    <p class="text-sm text-emerald-100/90 font-medium tracking-wide bg-emerald-700/30 px-4 py-1.5 rounded-full backdrop-blur-md">
                        Más de 600 estudiantes registrados hoy.
                    </p>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 p-8 md:p-14 bg-white flex flex-col justify-center">
            
            <div class="mb-8 text-center md:text-left">
                <h1 class="text-3xl font-bold text-slate-800 mb-2">Crear Cuenta</h1>
                <p class="text-slate-500">Ingresa tus datos para empezar el registro.</p>
            </div>

            @if(session('success'))
                <div class="mb-6 flex items-center p-4 bg-emerald-50 text-emerald-700 rounded-2xl border border-emerald-100 animate-fade-in" style="animation-duration: 0.5s;">
                    <svg class="w-5 h-5 mr-3 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span class="text-sm font-medium">{{ session('success') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-6 p-4 bg-rose-50 text-rose-700 rounded-2xl border border-rose-100">
                    <div class="flex items-center mb-2">
                        <svg class="w-5 h-5 mr-3 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
                        <span class="text-sm font-bold">Atención:</span>
                    </div>
                    <ul class="text-xs space-y-1 ml-8 list-disc">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ url('/register') }}" method="POST" class="space-y-4">
                @csrf

                <div class="space-y-4">
                    <div class="relative group">
                        <label for="name" class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Nombre Completo</label>
                        <input type="text" name="name" id="name" required value="{{ old('name') }}"
                            class="w-full mt-1 px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-4 focus:ring-emerald-500/10 focus:border-emerald-500 transition-all outline-none text-slate-700"
                            placeholder="Ej: Juan Pérez">
                    </div>

                    <div class="relative group">
                        <label for="email" class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Correo electrónico</label>
                        <input type="email" name="email" id="email" required value="{{ old('email') }}"
                            class="w-full mt-1 px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-4 focus:ring-emerald-500/10 focus:border-emerald-500 transition-all outline-none text-slate-700"
                            placeholder="usuario@gmail.com">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="relative group">
                            <label for="password" class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Contraseña</label>
                            <input type="password" name="password" id="password" required
                                class="w-full mt-1 px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-4 focus:ring-emerald-500/10 focus:border-emerald-500 transition-all outline-none text-slate-700">
                            
                            <div class="w-full bg-slate-100 h-1.5 rounded-full mt-2 overflow-hidden">
                                <div id="strengthBar" class="password-strength-bar h-full w-0 bg-slate-300"></div>
                            </div>
                            <span id="strengthText" class="text-[10px] font-bold uppercase tracking-wider text-slate-400 mt-1 block ml-1">Introducir caracteres</span>
                        </div>
                        <div class="relative group">
                            <label for="password_confirmation" class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Repetir</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required
                                class="w-full mt-1 px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-4 focus:ring-emerald-500/10 focus:border-emerald-500 transition-all outline-none text-slate-700">
                        </div>
                    </div>

                    <div class="relative group">
                        <label for="career_id" class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Carrera de Estudio</label>
                        <div class="relative">
                            <select name="career_id" id="career_id" required
                                class="w-full mt-1 px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-4 focus:ring-emerald-500/10 focus:border-emerald-500 transition-all outline-none text-slate-700 appearance-none cursor-pointer pr-10">
                                <option value="" disabled selected>Selecciona una opción...</option>
                                @foreach($careers as $career)
                                    <option value="{{ $career->id }}" {{ old('career_id') == $career->id ? 'selected' : '' }}>
                                        {{ $career->name }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pt-1 pointer-events-none text-slate-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-3 pt-2">
                    <input type="checkbox" name="terms_accept" id="terms_accepted" required
                        class="w-5 h-5 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500 accent-emerald-600 cursor-pointer transition-all">
                    <label for="terms_accepted" class="text-sm text-slate-500 select-none">
                        Acepto los <a href="#" class="text-emerald-600 font-bold hover:underline">términos de servicio</a>.
                    </label>
                </div>

                <button type="submit"
                    class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-4 rounded-2xl shadow-lg shadow-emerald-200 transition-all active:scale-[0.98] flex items-center justify-center gap-2 mt-2 cursor-pointer">
                    <span>CREAR MI CUENTA</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                </button>
            </form>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>