<div>
@if($value == 1)
    <x-icons.check-circle class="text-green-600 mx-auto" />
@elseif($value == 2)
    <x-icons.x-circle class="text-red-300 mx-auto" />
@endif
</div>