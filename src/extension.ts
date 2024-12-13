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

	// Register a type event handler
	const typeHandler = vscode.workspace.onDidChangeTextDocument((event) => {
		const editor = vscode.window.activeTextEditor;
		if (!editor) return;

		const changes = event.contentChanges;
		if (changes.length === 0) return;

		const change = changes[0];
		if (change.text === ';') {
			const position = editor.selection.active;
			const lineText = editor.document.lineAt(position.line).text;

			// 현재 커서 위치에 세미콜론이 있는지 확인
			if (lineText.charAt(position.character - 1) === ';') {
				editor.edit(editBuilder => {
					// 방금 입력된 세미콜론 제거
					editBuilder.delete(new vscode.Range(
						position.translate(0, -1),
						position
					));
				}).then(() => {
					// 커서를 다음 위치로 이동
					const newPosition = position.with(position.line, position.character);
					editor.selection = new vscode.Selection(newPosition, newPosition);
				});
			}
		}
	});

	// 키 입력 이벤트 핸들러 등록
	const semicolonHandler = vscode.commands.registerCommand('type', args => {
		const editor = vscode.window.activeTextEditor;
		if (!editor) return;

		if (args.text === ';') {
			const position = editor.selection.active;
			const lineText = editor.document.lineAt(position.line).text;

			// 현재 커서 위치에 세미콜론이 있는지 확인
			if (lineText.charAt(position.character) === ';') {
				// 커서만 이동
				const newPosition = position.with(position.line, position.character + 1);
				editor.selection = new vscode.Selection(newPosition, newPosition);
				return null; // 세미콜론 입력 방지
			}
		}
		return vscode.commands.executeCommand('default:type', args);
	});

	context.subscriptions.push(disposable);
	context.subscriptions.push(typeHandler);
	context.subscriptions.push(semicolonHandler);
}

// This method is called when your extension is deactivated
export function deactivate() {}
