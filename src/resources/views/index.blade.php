<div class="container">
    <div class="user-name">
      <p><?php $user = Auth::user(); ?>{{ $user->name}}さんお疲れ様です！</p>
    </div>
    <div class="wrapper">
      <div class="content">
        <form action="/attendancein" method="POST" >
        @csrf
          <input type="submit"   class="stamp"  value="勤務開始" <?php if ($btn['attendance_in'] == false) { ?> disabled <?php } ?>>
        </form>
        <form action="/attendanceout" method="POST">
        @csrf
          <input type="submit"   class="stamp"  value="勤務終了" <?php if ($btn['attendance_out'] == false) { ?> disabled <?php } ?>>
        </form>
      </div>
      <div class="content">
        <form action="/restin" method="POST">
        @csrf
          <input type="submit"   class="stamp"  value="休憩開始" <?php if ($btn['rest_in'] == false) { ?> disabled <?php } ?>>
        </form>
        <form action="/restout" method="POST">
        @csrf
          <input type="submit"   class="stamp"  value="休憩終了" <?php if ($btn['rest_out'] == false) { ?> disabled <?php } ?>>
        </form>  
      </div>
    </div>
  </div>
  <footer class="footer">
    Atte,inc.
  </footer>
@endsection