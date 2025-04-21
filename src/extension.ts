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

	// 세미콜론 자동 건너뛰기 기능 구현
	const skipSemicolonCommand = vscode.commands.registerCommand('scss-in-php.skipSemicolon', () => {
		const editor = vscode.window.activeTextEditor;
		if (!editor) {
			return;
		}

		// 지원되는 언어인지 확인
		const supportedLanguages = ['php-css-scss', 'html', 'php'];
		if (!supportedLanguages.includes(editor.document.languageId)) {
			// 지원되지 않는 언어면 일반 세미콜론 입력
			editor.edit(editBuilder => {
				editBuilder.insert(editor.selection.active, ';');
			});
			return;
		}

		const position = editor.selection.active;
		const lineText = editor.document.lineAt(position.line).text;

		// 현재 커서 위치에 세미콜론이 이미 있는지 확인
		if (position.character < lineText.length && lineText.charAt(position.character) === ';') {
			// 세미콜론이 있으면 건너뛰기
			const newPosition = position.with(position.line, position.character + 1);
			editor.selection = new vscode.Selection(newPosition, newPosition);
		} else {
			// 세미콜론이 없으면 입력
			editor.edit(editBuilder => {
				editBuilder.insert(position, ';');
			});
		}
	});

	context.subscriptions.push(disposable);
	context.subscriptions.push(skipSemicolonCommand);
}

// This method is called when your extension is deactivated
export function deactivate() {}
