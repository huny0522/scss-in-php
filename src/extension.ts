// The module 'vscode' contains the VS Code extensibility API
// Import the module and reference it with the alias vscode in your code below
import * as vscode from 'vscode';

// This method is called when your extension is activated
// Your extension is activated the very first time the command is executed
export function activate(context: vscode.ExtensionContext) {

	// Use the console to output diagnostic information (console.log) and errors (console.error)
	// This line of code will only be executed once when your extension is activated
	console.log('Congratulations, your extension "scss-in-php" is now active!');

	// The command has been defined in the package.json file
	// Now provide the implementation of the command with registerCommand
	// The commandId parameter must match the command field in package.json
	const disposable = vscode.commands.registerCommand('scss-in-php.helloWorld', () => {
		// The code you place here will be executed every time your command is executed
		// Display a message box to the user
		vscode.window.showInformationMessage('Hello World from SCSS IN PHP!');
	});

	// 세미콜론 핸들러를 즉시 등록
	const semicolonHandler = vscode.commands.registerCommand('type', args => {
		const editor = vscode.window.activeTextEditor;
		if (!editor) {
			return vscode.commands.executeCommand('default:type', args);
		}

		// PHP-CSS-SCSS, HTML, PHP 파일인 경우에만 처리
		const supportedLanguages = ['php-css-scss', 'html', 'php'];
		if (!supportedLanguages.includes(editor.document.languageId)) {
			return vscode.commands.executeCommand('default:type', args);
		}

		if (args.text === ';') {
			const position = editor.selection.active;
			const lineText = editor.document.lineAt(position.line).text;

			// 현재 커서 다음 위치에 세미콜론이 있는 경우에만 건너뛰기
			if (position.character < lineText.length && lineText.charAt(position.character) === ';') {
				const newPosition = position.with(position.line, position.character + 1);
				editor.selection = new vscode.Selection(newPosition, newPosition);
				return null;
			}
		}
		return vscode.commands.executeCommand('default:type', args);
	});

	context.subscriptions.push(disposable);
	context.subscriptions.push(semicolonHandler);
}

// This method is called when your extension is deactivated
export function deactivate() {}
