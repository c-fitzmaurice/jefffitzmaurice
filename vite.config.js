import tailwindcss from "@tailwindcss/vite";
import jigsaw from "@tighten/jigsaw-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
  plugins: [
    jigsaw({
      input: ["source/_assets/css/main.css", "source/_assets/js/main.js"],
      refresh: true,
    }),
    tailwindcss(),
  ],
});
