package test;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class Controller{
	@GetMapping("/api/test")
	public String getString() {
		return "AKS now works! demo please";
	}
}
