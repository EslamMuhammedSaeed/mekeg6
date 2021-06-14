<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'MEKEG')
<img src="https://mekeg.org/assets/images/logo.png" class="logo" alt="mekeg Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
