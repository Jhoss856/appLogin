<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiante</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gradient-to-br from-slate-50 to-slate-200 flex items-center justify-center min-h-screen antialiased font-sans px-4 py-10">

    <div class="bg-white p-8 rounded-2xl shadow-xl border border-slate-200 w-full max-w-md transition-all duration-300">
        
        <h1 class="text-2xl font-bold text-center text-slate-800 tracking-wide uppercase mb-8">
            Registro de Estudiante
        </h1>

        @if(session('success'))
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 p-4 rounded-xl mb-6 text-sm flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-rose-50 border border-rose-200 text-rose-700 p-4 rounded-xl mb-6 text-sm">
                <div class="flex items-center gap-2 font-semibold mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-rose-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Por favor corrige los siguientes errores:</span>
                </div>
                <ul class="list-disc list-inside space-y-0.5 text-rose-600 pl-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/register') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-sm font-semibold text-slate-700 mb-1.5">Nombre</label>
                <input type="text" id="name" name="name" required 
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-slate-800 placeholder-slate-400 transition"
                    placeholder="Ingresa tu nombre completo">
            </div>

            <div>
                <label for="email" class="block text-sm font-semibold text-slate-700 mb-1.5">Correo</label>
                <input type="email" id="email" name="email" required 
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-slate-800 placeholder-slate-400 transition"
                    placeholder="Correo Electrónico">
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-slate-700 mb-1.5">Contraseña</label>
                <input type="password" id="password" name="password" required 
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-slate-800 placeholder-slate-400 transition"
                    placeholder="Contraseña">
                <p class="text-xs text-slate-400 mt-1 pl-1">mínimo 8 caracteres</p>
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-semibold text-slate-700 mb-1.5">Confirmar Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required 
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-slate-800 placeholder-slate-400 transition"
                    placeholder="Repite tu contraseña">
            </div>

            <div>
                <label for="career_id" class="block text-sm font-semibold text-slate-700 mb-1.5">Carrera</label>
                <div class="relative">
                    <select name="career_id" id="career_id" required 
                        class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-slate-800 transition appearance-none cursor-pointer">
                        <option value="" disabled selected>Ingresa tu Carrera</option>
                        @foreach($careers as $career)
                            <option value="{{ $career->id }}">{{ $career->name }}</option>
                        @endforeach
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-slate-500">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="flex items-start gap-3 pt-2">
                <input type="checkbox" name="terms_accept" id="terms_accepted" required 
                    class="h-4 w-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500 mt-0.5 accent-emerald-600 cursor-pointer">
                <label for="terms_accepted" class="text-sm text-slate-600 cursor-pointer select-none leading-relaxed">
                    Acepto los <span class="text-emerald-600 font-medium hover:underline">términos y condiciones</span> de la Institución.
                </label>
            </div>

            <div class="pt-3">
                <button type="submit" 
                    class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3.5 px-4 rounded-xl shadow-lg hover:shadow-emerald-600/20 uppercase tracking-wider text-sm transition-all duration-200 cursor-pointer focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                    Continuar
                </button>
            </div>
        </form>
    </div>

</body>
</html>