import express from 'express';

class App {
	public app: express.Application;
	public port: number;

	constructor(appInit?: { port: number; middleware: Array<any> }) {
		this.app = express();
		this.port = appInit?.port || 3000;
		this.middleware(appInit.middleware);
	}

	public listen(): void {
		this.app.listen(this.port, () => {
			console.log(`App listening on the http://localhost:${this.port}`);
		});
	}

	protected middleware(middlewares: Array<any>): void {
		for (const middleware of middlewares) {
			this.app.use(middleware);
		}
	}
}

export default App;
