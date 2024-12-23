/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.html", // Tous les fichiers HTML à la racine
    "./*.php", // Tous les fichiers PHP à la racine
    "./**/*.php", // Tous les fichiers PHP dans des sous-dossiers
    "./path/to/templates/**/*.php" // Ajustez selon votre projet
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};


