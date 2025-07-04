<x-app-layout>
  <div class="p-6">
    <h2 class="text-xl font-bold mb-4">Keranjang Belanja</h2>
    @forelse ($items as $item)
      <div class="border p-4 rounded mb-2 flex justify-between">
        <span>{{ $item->product->name }} x {{ $item->quantity }}</span>
        <form action="{{ route('cart.remove', $item->id) }}" method="POST">
          @csrf @method('DELETE')
          <button class="text-red-500">Hapus</button>
        </form>
      </div>
    @empty
      <p>Keranjang kosong.</p>
    @endforelse

    @if($items->count())
    <form action="{{ route('checkout') }}" method="POST" class="mt-4">
      @csrf
      <button class="bg-green-500 text-white px-4 py-2 rounded">Checkout</button>
    </form>
    @endif
  </div>
</x-app-layout>