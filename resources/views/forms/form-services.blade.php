
@extends('layouts.form')
@foreach ($service as $service)
@section('title', 'Form ' . $service->name)

@section('content')
<section class="max-w-6xl mx-auto py-12 md:max-w-lg sm:max-w-xs">
    <div class="flex flex-col gap-y-2 text-center mb-10">
        <h3 class="text-5xl text-indigo-950 font-clash font-bold sm:text-3xl">Pengajuan {{ $service->name }}</h3>
        <p class="text-base leading-loose text-gray-500 sm:text-sm">Kemudahan Pengajuan yang juga dilengkapi dengan Panduan Penggunaan</p>
    </div>
    
    <form method="POST" id="formRequest" action="{{ route('form.submit') }}" enctype="multipart/form-data" class="mx-auto max-w-4xl">
        @csrf
        <input type="hidden" name="service_id" value="{{ $service->id }}">
        <div class="space-y-12">
            <!-- Applicant -->
            <x-applicant :instansi="$instansi">Pemohon</x-applicant>

            <!-- Service-specific component -->
            @if (str_contains($service->slug, 'vps'))
                <x-form-vps></x-form-vps>
            @elseif (str_contains($service->slug, 'hosting'))
                <x-form-hosting></x-form-hosting>
            @elseif (str_contains($service->slug, 'domain'))
                <x-form-domain></x-form-domain>
            @elseif (str_contains($service->slug, 'clearance'))
                <x-form-clearance></x-form-clearance>
            @else
                <x-form-other></x-form-other>
            @endif

            
        </div>

        <!-- Button -->
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" id="buttonSubmit" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <button type="submit" class="rounded-full bg-primary px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-950 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
        </div>
    </form>
</section>
@endforeach
@endsection
