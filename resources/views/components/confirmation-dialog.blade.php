@props([ 'message'])

<div class="text-center">
    <img src="{{asset('images/alert.gif')}}" alt="Alert Image" class="mx-auto max-w-24 w-full mb-4">
    <p class="mb-6">{{ $message ?? "Confirmation dialog message" }}</p>
</div>
