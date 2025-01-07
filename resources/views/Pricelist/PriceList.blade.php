@extends("layouts.navbar")

@section("title", "Pricelist RJ Autocare")

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Content -->
    <div class="mt-20 container mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-center text-red-600 font-bold text-2xl mb-4">Pricelist RJ Autocare</h1>
        <table class="w-full border-collapse border border-gray-200 text-center">
            <thead class="bg-red-600 text-white">
                <tr>
                    <th class="border border-gray-300 p-2">Service</th>
                    <th class="border border-gray-300 p-2">Small</th>
                    <th class="border border-gray-300 p-2">Medium</th>
                    <th class="border border-gray-300 p-2">Large</th>
                    <th class="border border-gray-300 p-2">Extra Large</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 p-2 text-left pl-4">Cuci + Oli Plastik</td>
                    <td class="border border-gray-300 p-2">Rp. 60.000</td>
                    <td class="border border-gray-300 p-2">Rp. 65.000</td>
                    <td class="border border-gray-300 p-2">Rp. 70.000</td>
                    <td class="border border-gray-300 p-2">Rp. 75.000</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2 text-left pl-4">Cuci + Waxing Layer</td>
                    <td class="border border-gray-300 p-2">Rp. 150.000</td>
                    <td class="border border-gray-300 p-2">Rp. 170.000</td>
                    <td class="border border-gray-300 p-2">Rp. 195.000</td>
                    <td class="border border-gray-300 p-2">Rp. 225.000</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2 text-left pl-4">Cuci + Oli Plastik + Wax</td>
                    <td class="border border-gray-300 p-2">Rp. 170.000</td>
                    <td class="border border-gray-300 p-2">Rp. 200.000</td>
                    <td class="border border-gray-300 p-2">Rp. 225.000</td>
                    <td class="border border-gray-300 p-2">Rp. 255.000</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2 text-left pl-4">Cuci + Engine Detailing</td>
                    <td class="border border-gray-300 p-2">Rp. 200.000</td>
                    <td class="border border-gray-300 p-2">Rp. 230.000</td>
                    <td class="border border-gray-300 p-2">Rp. 260.000</td>
                    <td class="border border-gray-300 p-2">Rp. 300.000</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 p-2 text-left pl-4">Cuci + Glass Renew</td>
                    <td class="border border-gray-300 p-2">Rp. 250.000</td>
                    <td class="border border-gray-300 p-2">Rp. 300.000</td>
                    <td class="border border-gray-300 p-2">Rp. 350.000</td>
                    <td class="border border-gray-300 p-2">Rp. 400.000</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 p-2 text-left pl-4">Cuci + Headlamp Renew</td>
                    <td class="border border-gray-300 p-2">Rp. 200.000</td>
                    <td class="border border-gray-300 p-2">Rp. 200.000</td>
                    <td class="border border-gray-300 p-2">Rp. 200.000</td>
                    <td class="border border-gray-300 p-2">Rp. 200.000</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 p-2 text-left pl-4">Cuci + Interior Detailing</td>
                    <td class="border border-gray-300 p-2">Rp. 300.000</td>
                    <td class="border border-gray-300 p-2">Rp. 350.000</td>
                    <td class="border border-gray-300 p-2">Rp. 400.000</td>
                    <td class="border border-gray-300 p-2">Rp. 450.000</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 p-2 text-left pl-4">Cuci + Exterior Detailing</td>
                    <td class="border border-gray-300 p-2">Rp. 500.000</td>
                    <td class="border border-gray-300 p-2">Rp. 600.000</td>
                    <td class="border border-gray-300 p-2">Rp. 700.000</td>
                    <td class="border border-gray-300 p-2">Rp. 800.000</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 p-2 text-left pl-4">Full Service Detailing</td>
                    <td class="border border-gray-300 p-2">Rp. 1.300.000</td>
                    <td class="border border-gray-300 p-2">Rp. 1.400.000</td>
                    <td class="border border-gray-300 p-2">Rp. 1.500.000</td>
                    <td class="border border-gray-300 p-2">Rp. 1.600.000</td>
                </tr>

            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
