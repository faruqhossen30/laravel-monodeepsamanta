<div class="space-y-2">
    <label for="{{$title}}"
        class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
        {{$label}}
    </label>
    <input id="{{$title}}" type="text" name="{{$title}}" value="{{$data ?? ''}}"
        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
        placeholder="{{$label}}">
    @error($title)
        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
    @enderror
</div>
