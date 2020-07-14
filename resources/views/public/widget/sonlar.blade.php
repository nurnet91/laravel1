@if(count($sonlar) > 0)
	<div class="widget">
		<h3>{{ tar('Sonlarni tanlash') }}</h3>
		<div class="calendar_wrap">
			<table class="wp-calendar">
				<caption>{{ tar($sonlar['hafta']) }}, {{ $sonlar['kun'] }}-{{ tar($sonlar['oy']) }} &nbsp;
					@if(!empty($sonlar['select']))
						<select name="change_son" id="change_son" style="cursor:pointer;" onchange="changeDropDown($(this))">
							@foreach($sonlar['select'] as $value)
								<option value="/sonlar/{{ $value->id }}" @if($value->yil == $sonlar['yil']) selected="selected" @endif>{{ $value->yil }}</option>
							@endforeach
						</select>
					@else
						{{ $sonlar['yil'] }}
					@endif
				</caption>
				<tbody>
					<tr>
						@foreach($sonlar['sonlar'] as $k => $v)
							<td class="@if($v->son == $sonlar['son']) today @endif">
								<a href="/sonlar/{{ $v->id }}">{{ $v->son }}</a>
							</td>
							@if( ($k + 1) % 7 == 0 )
								</tr>
								<tr>
							@endif
						@endforeach
					</tr>
				</tbody>
			</table>
			<br>
			<a href="/sonlar" class="icon-text more">{{ tar('Hammasini ko&rsquo;rish') }} &#59230;</a>
		</div>
	</div>
@endif