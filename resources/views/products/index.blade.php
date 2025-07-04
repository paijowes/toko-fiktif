<x-app-layout>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
    @foreach ($products as $product)
      <div class="bg-white shadow-md rounded-lg p-4">
        <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
        <p class="text-gray-600">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
        <form action="{{ route('cart.add', $product->id) }}" method="POST">
          @csrf
          <button class="mt-2 bg-blue-500 text-white px-4 py-2 rounded">Tambah ke Keranjang</button>
        </form>
      </div>
    @endforeach
  </div>
</x-app-layout>