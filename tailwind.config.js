module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    extend: {
        colors: theme => ({
            'scolmore': {
                50: '#F6F7F7',
                100: '#EDEEF0',
                200: '#D2D5D9',
                300: '#B7BBC2',
                400: '#828995',
                500: '#4C5667',
                600: '#444D5D',
                700: '#2E343E',
                800: '#22272E',
                900: '#171A1F',
            },
            'ovia': {
                50: '#FFFCF6',
                100: '#FFF8ED',
                200: '#FFEFD2',
                300: '#FFE5B7',
                400: '#FFD180',
                500: '#FFBD4A',
                600: '#E6AA43',
                700: '#99712C',
                800: '#735521',
                900: '#4D3916',
            },
            'ventol': {
                50: '#F5FDFE',
                100: '#EBFBFD',
                200: '#CCF4FA',
                300: '#AEEDF7',
                400: '#71E0F1',
                500: '#34D3EB',
                600: '#2FBED4',
                700: '#1F7F8D',
                800: '#175F6A',
                900: '#103F47',
            },
            'esp': {
                50: '#F7FCFB',
                100: '#EFF9F7',
                200: '#D7EFEA',
                300: '#BFE5DD',
                400: '#8FD2C4',
                500: '#5FBEAA',
                600: '#56AB99',
                700: '#397266',
                800: '#2B564D',
                900: '#1D3933',
            },
            'error': 'var(--text-error-color)',
        }),
    },
  },
  variants: {},
  plugins: [],
}
