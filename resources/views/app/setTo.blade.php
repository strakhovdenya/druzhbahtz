@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white shadow">@lang('titles.set_to_druzhba')</h1>
    <p>текст контента о НАБІР до КДЮСШ ХТЗ ХК DRUZHBA</p>
    <p>На відміну від поширеної думки Lorem Ipsum не є
        випадковим набором літер. Він походить з уривку
        класичної латинської літератури 45 року до н.е.,
        тобто має більш як 2000-річну історію. Річард Макклінток,
        професор латини з коледжу Хемпдін-Сидні, що у Вірджінії, вивчав
        одне з найменш зрозумілих латинських слів - consectetur - з уривку
        Lorem Ipsum, і у пошуку цього слова в класичній літературі знайшов
        безсумнівне джерело. Lorem Ipsum походить з розділів 1.10.32 та
        1.10.33 цицеронівського "de Finibus Bonorum et Malorum" ("Про межі
        добра і зла"), написаного у 45 році до н.е. Цей трактат з теорії
        етики був дуже популярним в епоху Відродження. Перший рядок Lorem
        Ipsum, "Lorem ipsum dolor sit amet..." походить з одного з рядків
        розділу 1.10.32.
    </p>
@endsection

@section('slider')
    @include('app.blocks.slider')
@endsection
