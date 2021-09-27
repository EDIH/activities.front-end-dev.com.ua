const token = $('meta[name="csrf-token"]').attr('content');

module.exports = {
    module: {
        rules: [
            {
                // You can use `regexp`
                // test: /vendor\.js/$
                test: /\.css$/,
                loader: 'exports-loader',
                use: ['style-loader', 'css-loader']
                // options: {
                //     exports: 'myFunction',
                // },
            },
        ],
    },
    token: token
};
// const CodeMirror = require("codemirror");
// require('codemirror/addon/edit/matchbrackets');
// require('codemirror/addon/edit/closebrackets');
// require('codemirror/addon/scroll/annotatescrollbar');
// require('codemirror/addon/search/matchesonscrollbar');
// require('codemirror/addon/search/searchcursor');
// require('codemirror/addon/search/match-highlighter');
// module.exports = {
//     token, CodeMirror
// }

// module.exports = { token };
