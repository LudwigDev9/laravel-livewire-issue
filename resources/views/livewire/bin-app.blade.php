<div>

    <div class="grid grid-cols-1 gap-4 p-4">
        <div>
            <label for="search" class="text-right">Item Code: </label>
            <input wire:model="search" autofocus="autofocus"
                   class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                   id=" search"
            />
        </div>

        @if ($message != '')
            <div class="mb-5 mt-5 bg-red-50 rounded-md py-4 px-4">
                <p class="font-bold text-green-500">
                    {{ $message }}
                </p>
            </div>
        @endif

        <div>
            <button wire:click="search()" class="btn btn-primary">Search</button>
        </div>
    </div>

    @if (isset($items))
        @if (!$items->isEmpty())
            <div class="grid grid-cols-1 gap-4 p-4">
                @foreach($items as $item)
                    <h2 class="md:text-3xl text-xs"><span class="font-bold">Code:</span>
                        {{ $item->code }}
                    </h2>
                @endforeach
            </div>
        @endif
    @endif

    @if (isset($subItems))
        @if (!$subItems->isEmpty())

            <table class="table w-full">
                <thead>
                <th class="border-2 border-gray-50">
                    Item No
                </th>
                <th class="border-2 border-gray-50">
                    Type
                </th>
                </thead>
                <tbody>
                @foreach($subItems as $item)
                    <tr>
                        <td class="border-2 border-gray-50">
                            {{ $item->itemNo }}
                        </td>
                        <td class="border-2 border-gray-50">
                            {{ $item->type }}
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    @endif

</div>
