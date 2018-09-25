package myweb;
import java.io.IOException;
 import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;

import javax.ejb.EJB;
 import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.monmetier.MonhotelLocel;
import com.monmetier.MonhotelRemot;
import com.monprojct.Chambre;
@WebServlet(name="Ma",urlPatterns= {"*.Ma"})
public class ControlerMonHotel extends HttpServlet{

	/**
	 * 
	 */
	private static String path;
	private static String action ;
	private static Date date1=new Date();
	private static Date  date2 =new Date();
	private static String type;
	private static final long serialVersionUID = 1L;


	@EJB
	private MonhotelRemot metier;
	@Override
	protected void doGet(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
		// TODO Auto-generated method stub

		path =req.getServletPath();
		if (path.equals("/MonHotel.Ma")) {

			req.getRequestDispatcher("index.jsp").forward(req, resp);
		}
		 else if (path.equals("/Chambre.Ma")) {

 			  if (action!=null) {
			 if (action.equals("voir")) {
			 
			 
			   String   dateA=req.getParameter("dateA");
				String   dateD=req.getParameter("dateD");
				type=req.getParameter("type");
				SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");

 	  try { 
						System.out.println(dateA);
						date1 = formatter.parse(dateA.trim());
						System.out.println(date1);
						System.out.println(formatter.format(date1));
						date2 = formatter.parse(dateD.trim());
						System.out.println(date2);
						System.out.println(formatter.format(date2));

					} catch (ParseException e) {
						e.printStackTrace();
 }
 
		

			 }
			 }  	

 				List<Chambre> Listchambres=metier.getChambreByEtat(true);
 				req.setAttribute("Listchambres", Listchambres);
 				req.getRequestDispatcher("Chambre.jsp").forward(req, resp);
 				
} 


	}
	@Override
	protected void doPost(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {


		path =req.getServletPath();
		if (path.equals("/MonHotel.Ma")) {

			req.getRequestDispatcher("index.html").forward(req, resp);
		}else if (path.equals("/Chambre.Ma")) {
			 
			 
			   String   dateA=req.getParameter("dateA");
				String   dateD=req.getParameter("dateD");
				type=req.getParameter("type");
				SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");

	  try { 
						System.out.println(dateA);
						date1 = formatter.parse(dateA.trim());
						System.out.println(date1);
						System.out.println(formatter.format(date1));
						date2 = formatter.parse(dateD.trim());
						System.out.println(date2);
						System.out.println(formatter.format(date2));

					} catch (ParseException e) {
						e.printStackTrace();
							} 
		

		List<Chambre> Listchambres=metier.getChambreByEtat(true);
		req.setAttribute("Listchambres", Listchambres);
		req.getRequestDispatcher("Chambre.jsp").forward(req, resp);

  } 

	}
	}
