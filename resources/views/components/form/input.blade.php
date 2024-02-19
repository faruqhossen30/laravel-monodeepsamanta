<div class="space-y-1 py-2">
    <label for="{{$title}}"
        class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200 py-1">
        {{$label}}
    </label>
    <input id="{{$title}}" type="{{$type ?? ''}}" name="{{$title}}" value="{{$value ?? old($title)}}"
        class="py-2 px-3 pr-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 bg-gray-50 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
        placeholder="{{$label}}">
    @error($title)
        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
    @enderror
</div>
