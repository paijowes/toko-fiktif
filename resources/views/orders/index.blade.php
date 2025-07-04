<x-app-layout>
  <div class="p-6">
    <h2 class="text-xl font-bold mb-4">Pesanan Saya</h2>
    @foreach ($orders as $order)
      <div class="border p-4 mb-4 bg-white shadow rounded">
        <p class="font-semibold">Pesanan #{{ $order->id }} - {{ ucfirst($order->status) }}</p>
        <ul>
          @foreach ($order->items as $item)
            <li>{{ $item->product->name }} x {{ $item->quantity }}</li>
          @endforeach
        </ul>
      </div>
    @endforeach
  </div>
</x-app-layout>