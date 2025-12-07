import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/js/student/front-end/dropdown.js',
                'resources/js/student/front-end/add-student-modal.js',
                'resources/js/utils/helper.js',
            ],
            refresh: true,
        }),
    ],
});
