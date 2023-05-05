public class Prototype {
    public static void main(String[] args) throws CloneNotSupportedException {
        MyClass obj1 = new MyClass(1, "Objeto 1");
        MyClass obj2 = (MyClass) obj1.clone();
        System.out.println(obj2.getName()); 
    }

}
