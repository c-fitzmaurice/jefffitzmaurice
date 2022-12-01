module.exports = {
  content: [
    "source/**/*.html",
    "source/**/*.md",
    "source/**/*.js",
    "source/**/*.php",
    "source/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      padding: "1rem",
    },
    extend: {
      colors: {
        gold: "#C0A062",
        transparent: "transparent",
        black: "#000",
        white: "#fff",
      },
      fontFamily: {
        sans: ["Lato", "sans-serif"],
        serif: ["Playfair Display", "serif"],
      },
    },
  },
  plugins: [],
};
