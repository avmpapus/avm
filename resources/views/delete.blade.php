        @foreach ($users as $user)
        @endforeach
		<a href = '/delete/{{ $user->id }}'>Delete</a>
		<script>
  window.location.href = "/";
</script>