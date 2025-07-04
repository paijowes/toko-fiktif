<x-app-layout>
    <div class="p-6 space-y-6">
        <h1 class="text-3xl font-semibold">
            👋 Selamat datang, <span class="text-indigo-500">{{ Auth::user()->name }}</span>!
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Katalog -->
            <a href="{{ route('home') }}"
               class="transform hover:scale-105 transition duration-300 ease-in-out bg-gradient-to-br from-blue-500 to-indigo-600 text-white py-8 rounded-xl shadow-lg flex flex-col items-center justify-center">
                <div class="text-5xl mb-2 animate-bounce">🏠</div>
                <div class="text-xl font-semibold">Lihat Katalog</div>
            </a>

            <!-- Keranjang -->
            <a href="{{ route('cart.index') }}"
               class="transform hover:scale-105 transition duration-300 ease-in-out bg-gradient-to-br from-green-400 to-green-600 text-white py-8 rounded-xl shadow-lg flex flex-col items-center justify-center">
                <div class="text-5xl mb-2 animate-pulse">🛒</div>
                <div class="text-xl font-semibold">Lihat Keranjang</div>
            </a>

            <!-- Riwayat Pesanan -->
            <a href="{{ route('orders.index') }}"
               class="transform hover:scale-105 transition duration-300 ease-in-out bg-gradient-to-br from-purple-500 to-pink-600 text-white py-8 rounded-xl shadow-lg flex flex-col items-center justify-center">
                <div class="text-5xl mb-2 animate-spin-slow">📦</div>
                <div class="text-xl font-semibold">Riwayat Pesanan</div>
            </a>
        </div>
    </div>
</x-app-layout>
