import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

export default {
    darkMode: ['variant', [
        '@media (prefers-color-scheme: light) { &:not(.light *) }',
        '&:is(.light *)',
    ]],
    presets: [
        require("./vendor/power-components/livewire-powergrid/tailwind.config.js"),
    ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        './app/Livewire/**/*Table.php',
        './vendor/power-components/livewire-powergrid/resources/views/**/*.php',
        './vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php'
    ],
    theme: {
        extend: {
            colors: {
                'pg-primary': '#016766',
                primary: '#016766',
                dark: '#072A2C',
                secondary: '#00A19B',
                danger: '#FF8565',
                warning: '#FFBD23',
                light: '#F4F8F9',
                'secondary-text': '#6B6D7A',
                'primary-text': '#2E3144',
                active: '#0E4948'
            }
        },
    },

    plugins: [forms, typography],
}
