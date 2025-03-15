import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // 'blog/css/blog-styles.css',
                'resources/js/blog.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        port: 8080,
        hmr: {
            host: 'localhost',
        },
    },
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    }
});
