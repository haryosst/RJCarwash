@extends("layouts.navbar")

@section("title", "RJ Carwash & Autocare - Engine Detailing")
@section("content")
<div class="bg-gray-50 min-h-screen">
    <div class="container mx-auto py-10 pt-16">
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-4">Engine Detailing</h1>
            <p class="text-lg">
                Kami menyediakan layanan pembersihan engine bay mobil sehingga bersih dari kotoran.
            </p>
        </div>

        <!-- Single Service Section -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="relative w-full h-96 mb-6">
                <!-- Carousel -->
                <div class="h-full w-full overflow-hidden rounded-lg">
                    <video class="w-full h-full object-cover" autoplay loop muted>
                        <source src="/assets/Interior2.mp4" type="video/mp4">
                        Browser Anda tidak mendukung video.
                    </video>
                </div>
            </div>
            <h2 class="text-2xl font-bold mb-4 text-center">Engine Detailing</h2>
            <p class="text-gray-600 mb-4 text-center">
                Layanan pembersihan engine bay mobil dengan mendetail pada area yang terkena kotoran seperti oli, minyak, oksidasi dan lain2.
            </p>
        </div>
    </div>
</div>
@endsection
