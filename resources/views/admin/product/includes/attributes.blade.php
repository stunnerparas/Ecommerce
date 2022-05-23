<div class="form-group">
    <div class="panel panel-default">
        <div class="panel-header">
            <h4>Attributes</h4>
        </div>

        <div class="panel-body product_category">
            <ul style="padding-left:0" class="category_checkbox">
                @foreach ($attributes as $attribute)
                    <li>
                        <input disabled type="checkbox" class="" value=""><label
                            for="option">{{ $attribute->name }}</label>
                        <ul>
                            @php
                                $values = getAttributeValues($attribute->id);
                            @endphp

                            @if ($values)
                                @foreach ($values as $value)
                                    <li>
                                        <input @if (in_array($value->id, $productAttributes)) {{ 'checked' }} @endif
                                            type="checkbox" name="attribute[]" class=""
                                            value="{{ $value->id }}">
                                        <label>{{ $value->name }}</label>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
