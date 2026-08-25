const fs = require('fs');
const content = fs.readFileSync('../docs/design/H-01 Login.md', 'utf8');

const match = content.match(/tailwind\.config\s*=\s*(\{[\s\S]*?\})\s*<\/script>/);
if (match) {
    let jsonStr = match[1];
    // Need to safely parse it. The JSON has some non-quoted keys perhaps. 
    // Wait, it's valid JS object, not necessarily strict JSON. Let's run it in a Function.
    const config = new Function('return ' + jsonStr)();
    
    let css = `@import 'tailwindcss';\n\n@source '../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php';\n@source '../../storage/framework/views/*.php';\n\n@theme {\n`;
    
    const colors = config.theme.extend.colors;
    for (const [key, value] of Object.entries(colors)) {
        css += `  --color-${key}: ${value};\n`;
    }
    
    const borderRadius = config.theme.extend.borderRadius;
    for (const [key, value] of Object.entries(borderRadius)) {
        if (key === 'DEFAULT') css += `  --radius: ${value};\n`;
        else css += `  --radius-${key}: ${value};\n`;
    }
    
    const spacing = config.theme.extend.spacing;
    for (const [key, value] of Object.entries(spacing)) {
        css += `  --spacing-${key}: ${value};\n`;
    }
    
    const fontFamily = config.theme.extend.fontFamily;
    for (const [key, value] of Object.entries(fontFamily)) {
        css += `  --font-${key}: '${value[0]}', sans-serif;\n`;
    }
    
    const fontSize = config.theme.extend.fontSize;
    for (const [key, value] of Object.entries(fontSize)) {
        css += `  --text-${key}: ${value[0]};\n`;
        if (value[1] && value[1].lineHeight) css += `  --text-${key}--line-height: ${value[1].lineHeight};\n`;
        if (value[1] && value[1].fontWeight) css += `  --text-${key}--font-weight: ${value[1].fontWeight};\n`;
    }
    
    css += `}\n`;
    fs.writeFileSync('../resources/css/app.css', css);
    console.log("CSS generated!");
} else {
    console.log("No match found.");
}
