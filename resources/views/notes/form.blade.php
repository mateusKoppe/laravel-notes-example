<div class="form-group">
    <label for="title">Título</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Título"
        @if (isset($note))
        value="{{$note->title}}"
        @endif
    >
</div>
<div class="form-group">
    <label for="description">Descrição</label>
    <textarea type="text" name="description" placeholder="Descrição" class="form-control" id="description"
    >{{isset($note) ? $note->description : ""}}</textarea>
</div>
<div class="form-group">
    <label for="schedule">Para quando</label>
    <input type="date" name="schedule" class="form-control" id="schedule"
        @if (isset($note) && $note->schedule)
        value="{{$note->schedule->format('Y-m-d')}}"
        @endif
    >
</div>
