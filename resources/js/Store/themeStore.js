import {defineStore} from "pinia";
import {ref} from "vue";

const LIGHT = 'light'
const DARK = 'dark'
const LOCAL_STORAGE_KEY = 'theme'

const defaultTheme = localStorage.getItem('theme') ?? 'light'

export const useThemeStore = defineStore(LOCAL_STORAGE_KEY, () => {
    const theme = ref(defaultTheme)

    const toggleTheme = () => {
        theme.value = theme.value === LIGHT ? DARK : LIGHT
        localStorage.setItem(LOCAL_STORAGE_KEY, theme.value)
    }

    return { theme, toggleTheme }
})
