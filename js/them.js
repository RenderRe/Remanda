
document.addEventListener('DOMContentLoaded', () => {
    const currentTheme = localStorage.getItem('theme') || 'dark-theme';
    document.body.classList.add(currentTheme + '-theme');

    const themeToggleButton = document.getElementById('theme-toggle');
    themeToggleButton.addEventListener('click', () => {
        const newTheme = document.body.classList.contains('light-theme') ? 'dark' : 'light';
        document.body.classList.remove('light-theme', 'dark-theme');
        document.body.classList.add(newTheme + '-theme');
        localStorage.setItem('theme', newTheme);
    });
});
