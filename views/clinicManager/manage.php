<link href="public/css/manage.css" rel="stylesheet">

<div class="add-zone">
  <h5>Adaugă o nouă dată disponibilă</h5>
  <form method="post" action="index.php?create=true">
    <div class="mb-3">
      <input name="data" type="date" class="form-control" placeholder="Date" required>
    </div>

    <div class="mb-3">
      <input name ="ora" type="time" class="form-control" placeholder="Time" value="16:00" required>
    </div>

    <div class="mb-3">
      <input name="pret" type="number" class="form-control" placeholder="Price" required>
    </div>

    <div class="mb-3">
      <input name="specializare" type="text" class="form-control" placeholder="Specializare" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<div class="see-zone">
  <h1>Programări viitoare</h1>
  <div class="see-appo-wrapper">
    <div class="see-appo">
      <h6>Data:</6>
      <h6>Ora:</6>
      <h6>Nume client:</6>
      <h6>Telefon client:</6>
    </div>
  </div>
</div>