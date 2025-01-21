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

	// 키 입력 이벤트 핸들러 등록
	const semicolonHandler = vscode.commands.registerCommand('type', args => {
		const editor = vscode.window.activeTextEditor;
		if (!editor) return;

		// PHP-CSS-SCSS 또는 HTML 파일인 경우에만 처리
		if (editor.document.languageId !== 'php-css-scss' && editor.document.languageId !== 'html' && editor.document.languageId !== 'php') {
			return vscode.commands.executeCommand('default:type', args);
		}

		if (args.text === ';') {
			const position = editor.selection.active;
			const lineText = editor.document.lineAt(position.line).text;

			// 현재 커서 다음 위치에 세미콜론이 있는 경우에만 건너뛰기
			if (position.character < lineText.length && lineText.charAt(position.character) === ';') {
				// 커서만 이동
				const newPosition = position.with(position.line, position.character + 1);
				editor.selection = new vscode.Selection(newPosition, newPosition);
				return null; // 세미콜론 입력 방지
			}
		}
		return vscode.commands.executeCommand('default:type', args);
	});

	context.subscriptions.push(disposable);
	context.subscriptions.push(semicolonHandler);
}

// This method is called when your extension is deactivated
export function deactivate() {}
