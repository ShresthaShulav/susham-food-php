/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.{html,js,php}'],
  theme: {
    extend: {
      colors: {
        gainsboro: {
          "100": "#e6e6e6",
          "200": "#e0d8ce",
          "300": "#e0d8cd",
          "400": "rgba(217, 217, 217, 0.03)",
          "500": "#d8dadc",
        },
        darkslategray: {
          "100": "#3e4958",
          "200": "#285a43",
          "300": "#145940",
          "400": "#29362f",
          "500": "rgba(41, 54, 47, 0.2)",
          "600": "rgba(41, 54, 47, 0.5)",
          "700": "rgba(41, 54, 47, 0.1)",
        },
        gray1: {
          "100": "rgba(255, 255, 255, 0.8)",
          "200": "rgba(18, 18, 18, 0.8)",
          "300": "rgba(35, 41, 41, 0.5)",
          "400": "rgba(255, 255, 255, 0.2)",
        },
        darkseagreen: "#9ad2ae",
        "light-gray-11": "#000",
        yellowgreen: "#8bc63e",
        "chestnut-800": "#252525",
        "chestnut-600": "#7b785b",
        "grey-grey-500": "#667085",
        white: "#fff",
        "gray-300": "#d0d5dd",
        "grey-grey-800": "#383e49",
        "grey-grey-700": "#48505e",
        lightgoldenrodyellow: "#cfe1b9",
        silver: {
          "100": "#c7bfb3",
          "200": "#bdbdbd",
          "300": "#b5bdc4",
        },
        "french-grey": "#d1d1d8",
        "cool-grey": "#a2a3b1",
        palegoldenrod: "#ebe1ac",
        "space-cadet": "#17183b",
        "imperial-red": "#e14b4b",
        "light-primary": "#1573fe",
        whitesmoke: {
          "100": "#f8f8f8",
          "200": "rgba(247, 248, 250, 0.8)",
          "300": "#f0f0f0",
          "400": "rgba(248, 248, 248, 0.03)",
        },
        "light-gray-4": "#d9d9d9",
        teal: {
          "100": "#4f8069",
          "200": "#3b8066",
        },
        "success-500": "#12b76a",
        lightgray: {
          "100": "#d3d3d3",
          "200": "#cacaca",
        },
        dimgray: "#726c6c",
        gold: "rgba(246, 192, 2, 0.26)",
      },
      spacing: {},
      fontFamily: {
        "body-2-medium": "Inter",
        spectral: "Spectral",
        lato: "Lato",
        "body-medium": "Roboto",
        orienta: "Orienta",
        "text-sm": "Jost",
        poppins: "Poppins",
        raleway: "Raleway",
        "open-sans": "'Open Sans'",
        smudger: "Smudger LET",
      },
      borderRadius: {
        "3xs": "10px",
        xl: "20px",
        mini: "15px",
        sm: "14px",
        mid: "17px",
        "8xs": "5px",
        "31xl": "50px",
        "61xl": "80px",
      },
    },
    fontSize: {
      "3xs": "10px",
      sm: "14px",
      "mini-1": "14.1px",
      "9xl": "28px",
      "3xl": "22px",
      "5xl": "24px",
      lgi: "19px",
      "29xl": "48px",
      "10xl": "29px",
      "19xl": "38px",
      xl: "20px",
      "13xl": "32px",
      "2xs": "11px",
      base: "16px",
      "4xs": "9px",
      smi: "13px",
      "61xl": "80px",
      "21xl": "40px",
      "7xl": "26px",
      "11xl": "30px",
      lg: "18px",
      "77xl": "96px",
      xs: "12px",
      "17xl": "36px",
      mini: "15px",
      inherit: "inherit",
    },
    screens: {
      mq1350: {
        raw: "screen and (max-width: 1350px)",
      },
      mq1250: {
        raw: "screen and (max-width: 1250px)",
      },
      mq1225: {
        raw: "screen and (max-width: 1225px)",
      },
      lg: {
        max: "1200px",
      },
      mq1125: {
        raw: "screen and (max-width: 1125px)",
      },
      mq1050: {
        raw: "screen and (max-width: 1050px)",
      },
      mq800: {
        raw: "screen and (max-width: 800px)",
      },
      mq750: {
        raw: "screen and (max-width: 750px)",
      },
      mq450: {
        raw: "screen and (max-width: 450px)",
      },
    },
  },
  plugins: [],
  prefix: 'tw-',
}

