@props(['rows' => 4])

<div class="relative overflow-x-auto overflow-y-auto border-gray-200 rounded-md">
    <table class="w-full text-sm text-left rtl:text-right text-primary-text">
        <thead class="text-xs text-gray-700 uppercase bg-secondary/10 dark:bg-gray-700">
        <tr>
            @for($i = 1; $i <= $rows; $i++)
                <th scope="col" class="px-6 py-3">
                    <div class="mx-auto w-8 h-2 md:w-1/2 md:h-2.5 min-w-8 rounded bg-gray-300 animate-pulse"></div>
                </th>
            @endfor
        </tr>
        </thead>
        <tbody>
        @for($i = 1; $i <= 4; $i++)
            <tr class="bg-white border-b odd:bg-white even:bg-gray-50">
                @for($y = 1; $y <= $rows; $y++)
                    <td class="px-6 py-4">
                        <div class="mx-auto w-8 h-2 md:w-1/2 md:h-2.5 min-w-8 rounded bg-gray-300 animate-pulse"></div>
                    </td>
                @endfor
            </tr>
        @endfor
        </tbody>
    </table>
</div>


