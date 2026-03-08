<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Devenir Partenaire | ADI CHAD</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <section class="min-h-screen flex items-center justify-center px-4">
    <div class="bg-white rounded-xl shadow-lg max-w-xl w-full p-8">

      <h2 class="text-2xl font-bold text-center text-blue-800">
        Devenir Partenaire
      </h2>

      <p class="text-center text-gray-600 mt-2">
        Remplissez le formulaire ci-dessous
      </p>

      <form method="POST" action="{{ route('partenaire.send') }}" class="mt-6 space-y-4">
  @csrf

  <!-- Message de succès -->
  @if(session('success'))
    <div class="bg-green-100 text-green-800 p-3 rounded">
      {{ session('success') }}
    </div>
  @endif

  <div>
    <label>Nom de l'organisation</label>
    <input name="nom" required class="w-full border px-4 py-3 rounded">
  </div>

  <div>
    <label>Domais d'activité</label>
    <input name="prenom" required class="w-full border px-4 py-3 rounded">
  </div>

  <div>
    <label>Email</label>
    <input type="email" name="email" required class="w-full border px-4 py-3 rounded">
  </div>

  <div>
    <label>Message</label>
    <textarea name="message" rows="4" required
              class="w-full border px-4 py-3 rounded"></textarea>
  </div>

  <button class="w-full bg-yellow-500 text-white py-3 rounded">
    Envoyer la demande
  </button>
</form>


    </div>
  </section>

</body>
</html>
