<div>
    <livewire:form/>
    <table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">title</th>
      <th scope="col">content</th>
    </tr>
  </thead>
  <tbody>
    @foreach($anotations as $anotation)
    <tr>

      <td>{{ $anotation->title }}</td>
      <td>{{ $anotation->content }}</td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
