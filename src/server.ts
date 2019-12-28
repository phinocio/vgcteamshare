import App from './App';
import bodyParser from 'body-parser';
import { Request, Response } from 'express';

const app = new App({
	port: 3000,
	middleware: [bodyParser.json()]
});
app.listen();

app.app.get('/', (req: Request, res: Response) => {
	res.json(req.baseUrl);
});
