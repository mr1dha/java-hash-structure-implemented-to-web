import java.io.File;
import java.util.Scanner;
import java.util.ArrayList; 
import java.io.*;

public class Main
{
	public static void main(String[] args) 
	{ 
		Map<String, ArrayList<String>> map = new Map<>(); 
    	Scanner input = new Scanner(System.in);
    	String strLine = "";

    	try {
            BufferedReader br = new BufferedReader(new FileReader("../file/data.txt"));
            while (strLine != null)
            {
                	strLine = br.readLine();
                    if(strLine != null){
                    	strLine = strLine.replace("\"", "'");
                    	String[] data = strLine.split(":",2);
		                if(map.get(data[0]) == null)
		                {
		                	ArrayList<String> temp =  new ArrayList<>();
		                	temp.add(data[1]);
		                	map.add(data[0], temp);
		                }
		                else{
		                	map.get(data[0]).add(data[1]);
		                }
                    }
            }
             br.close();
        } catch (FileNotFoundException e) {
            System.err.println("File not found");
        } catch (IOException e) {
            System.err.println("Unable to read the file.");
        }

        map.searchEditor(args[0], map.get(args[0]));

		// System.out.println(map.size()); 
		// System.out.println(map.isEmpty()); 
	}  
}