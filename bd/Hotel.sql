USE [master]
GO
/****** Object:  Database [tpBD]    Script Date: 1/9/2023 08:36:04 ******/
CREATE DATABASE [tpBD]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'tpBD', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.SQLEXPRESS\MSSQL\DATA\tpBD.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'tpBD_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.SQLEXPRESS\MSSQL\DATA\tpBD_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT, LEDGER = OFF
GO
ALTER DATABASE [tpBD] SET COMPATIBILITY_LEVEL = 160
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [tpBD].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [tpBD] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [tpBD] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [tpBD] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [tpBD] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [tpBD] SET ARITHABORT OFF 
GO
ALTER DATABASE [tpBD] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [tpBD] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [tpBD] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [tpBD] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [tpBD] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [tpBD] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [tpBD] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [tpBD] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [tpBD] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [tpBD] SET  DISABLE_BROKER 
GO
ALTER DATABASE [tpBD] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [tpBD] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [tpBD] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [tpBD] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [tpBD] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [tpBD] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [tpBD] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [tpBD] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [tpBD] SET  MULTI_USER 
GO
ALTER DATABASE [tpBD] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [tpBD] SET DB_CHAINING OFF 
GO
ALTER DATABASE [tpBD] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [tpBD] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [tpBD] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [tpBD] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
ALTER DATABASE [tpBD] SET QUERY_STORE = ON
GO
ALTER DATABASE [tpBD] SET QUERY_STORE (OPERATION_MODE = READ_WRITE, CLEANUP_POLICY = (STALE_QUERY_THRESHOLD_DAYS = 30), DATA_FLUSH_INTERVAL_SECONDS = 900, INTERVAL_LENGTH_MINUTES = 60, MAX_STORAGE_SIZE_MB = 1000, QUERY_CAPTURE_MODE = AUTO, SIZE_BASED_CLEANUP_MODE = AUTO, MAX_PLANS_PER_QUERY = 200, WAIT_STATS_CAPTURE_MODE = ON)
GO
USE [tpBD]
GO
/****** Object:  Table [dbo].[Actividades_Recreativas]    Script Date: 1/9/2023 08:36:04 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Actividades_Recreativas](
	[ActividadID] [int] NOT NULL,
	[Nombre] [varchar](50) NOT NULL,
	[Descripcion] [varchar](200) NULL,
	[Tarifa] [decimal](10, 2) NULL,
PRIMARY KEY CLUSTERED 
(
	[ActividadID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Clientes]    Script Date: 1/9/2023 08:36:04 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Clientes](
	[ClienteID] [int] NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
	[Email] [varchar](100) NOT NULL,
	[Telefono] [varchar](20) NULL,
	[Direccion] [varchar](200) NULL,
PRIMARY KEY CLUSTERED 
(
	[ClienteID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Comidas]    Script Date: 1/9/2023 08:36:04 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Comidas](
	[ComidaID] [int] NOT NULL,
	[Nombre] [varchar](50) NOT NULL,
	[Descripcion] [varchar](200) NULL,
	[Precio] [decimal](10, 2) NULL,
PRIMARY KEY CLUSTERED 
(
	[ComidaID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Comodidades]    Script Date: 1/9/2023 08:36:04 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Comodidades](
	[ComodidadID] [int] NOT NULL,
	[Nombre] [varchar](50) NOT NULL,
	[Descripcion] [varchar](200) NULL,
PRIMARY KEY CLUSTERED 
(
	[ComodidadID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Empleados]    Script Date: 1/9/2023 08:36:04 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Empleados](
	[EmpleadoID] [int] NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
	[Puesto] [varchar](50) NOT NULL,
	[Salario] [decimal](10, 2) NULL,
	[FechaContratacion] [date] NULL,
PRIMARY KEY CLUSTERED 
(
	[EmpleadoID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Eventos_Especiales]    Script Date: 1/9/2023 08:36:04 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Eventos_Especiales](
	[EventoID] [int] NOT NULL,
	[Nombre] [varchar](50) NOT NULL,
	[FechaInicio] [date] NULL,
	[FechaFin] [date] NULL,
PRIMARY KEY CLUSTERED 
(
	[EventoID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Habitaciones]    Script Date: 1/9/2023 08:36:04 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Habitaciones](
	[HabitacionID] [int] NOT NULL,
	[Numero] [int] NOT NULL,
	[TipoHabitacionID] [int] NULL,
	[Capacidad] [int] NULL,
	[Piso] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[HabitacionID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Pagos]    Script Date: 1/9/2023 08:36:04 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Pagos](
	[PagoID] [int] NOT NULL,
	[ReservacionID] [int] NULL,
	[Monto] [decimal](10, 2) NULL,
	[FechaPago] [date] NULL,
PRIMARY KEY CLUSTERED 
(
	[PagoID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Politicas]    Script Date: 1/9/2023 08:36:04 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Politicas](
	[PoliticaID] [int] NOT NULL,
	[Nombre] [varchar](50) NOT NULL,
	[Descripcion] [varchar](200) NULL,
PRIMARY KEY CLUSTERED 
(
	[PoliticaID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Reservaciones]    Script Date: 1/9/2023 08:36:04 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Reservaciones](
	[ReservacionID] [int] NOT NULL,
	[ClienteID] [int] NULL,
	[HabitacionID] [int] NULL,
	[FechaInicio] [date] NULL,
	[FechaFin] [date] NULL,
PRIMARY KEY CLUSTERED 
(
	[ReservacionID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Servicios]    Script Date: 1/9/2023 08:36:04 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Servicios](
	[ServicioID] [int] NOT NULL,
	[Nombre] [varchar](50) NOT NULL,
	[Descripcion] [varchar](200) NULL,
	[Tarifa] [decimal](10, 2) NULL,
PRIMARY KEY CLUSTERED 
(
	[ServicioID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Servicios_Habitacion]    Script Date: 1/9/2023 08:36:04 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Servicios_Habitacion](
	[ServicioHabitacionID] [int] NOT NULL,
	[HabitacionID] [int] NULL,
	[ServicioID] [int] NULL,
	[FechaSolicitud] [date] NULL,
PRIMARY KEY CLUSTERED 
(
	[ServicioHabitacionID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Tipo_Habitaciones]    Script Date: 1/9/2023 08:36:04 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Tipo_Habitaciones](
	[TipoHabitacionID] [int] NOT NULL,
	[Nombre] [varchar](50) NOT NULL,
	[Descripcion] [varchar](200) NULL,
PRIMARY KEY CLUSTERED 
(
	[TipoHabitacionID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[Habitaciones]  WITH CHECK ADD FOREIGN KEY([TipoHabitacionID])
REFERENCES [dbo].[Tipo_Habitaciones] ([TipoHabitacionID])
GO
ALTER TABLE [dbo].[Habitaciones]  WITH CHECK ADD  CONSTRAINT [FK_Habitaciones_TipoHabitacion] FOREIGN KEY([TipoHabitacionID])
REFERENCES [dbo].[Tipo_Habitaciones] ([TipoHabitacionID])
GO
ALTER TABLE [dbo].[Habitaciones] CHECK CONSTRAINT [FK_Habitaciones_TipoHabitacion]
GO
ALTER TABLE [dbo].[Pagos]  WITH CHECK ADD FOREIGN KEY([ReservacionID])
REFERENCES [dbo].[Reservaciones] ([ReservacionID])
GO
ALTER TABLE [dbo].[Pagos]  WITH CHECK ADD  CONSTRAINT [FK_Pagos_Reservaciones] FOREIGN KEY([ReservacionID])
REFERENCES [dbo].[Reservaciones] ([ReservacionID])
GO
ALTER TABLE [dbo].[Pagos] CHECK CONSTRAINT [FK_Pagos_Reservaciones]
GO
ALTER TABLE [dbo].[Reservaciones]  WITH CHECK ADD FOREIGN KEY([ClienteID])
REFERENCES [dbo].[Clientes] ([ClienteID])
GO
ALTER TABLE [dbo].[Reservaciones]  WITH CHECK ADD FOREIGN KEY([HabitacionID])
REFERENCES [dbo].[Habitaciones] ([HabitacionID])
GO
ALTER TABLE [dbo].[Reservaciones]  WITH CHECK ADD  CONSTRAINT [FK_Reservaciones_Clientes] FOREIGN KEY([ClienteID])
REFERENCES [dbo].[Clientes] ([ClienteID])
GO
ALTER TABLE [dbo].[Reservaciones] CHECK CONSTRAINT [FK_Reservaciones_Clientes]
GO
ALTER TABLE [dbo].[Reservaciones]  WITH CHECK ADD  CONSTRAINT [FK_Reservaciones_Habitaciones] FOREIGN KEY([HabitacionID])
REFERENCES [dbo].[Habitaciones] ([HabitacionID])
GO
ALTER TABLE [dbo].[Reservaciones] CHECK CONSTRAINT [FK_Reservaciones_Habitaciones]
GO
ALTER TABLE [dbo].[Servicios_Habitacion]  WITH CHECK ADD FOREIGN KEY([HabitacionID])
REFERENCES [dbo].[Habitaciones] ([HabitacionID])
GO
ALTER TABLE [dbo].[Servicios_Habitacion]  WITH CHECK ADD FOREIGN KEY([ServicioID])
REFERENCES [dbo].[Servicios] ([ServicioID])
GO
ALTER TABLE [dbo].[Servicios_Habitacion]  WITH CHECK ADD  CONSTRAINT [FK_ServiciosHabitacion_Habitaciones] FOREIGN KEY([HabitacionID])
REFERENCES [dbo].[Habitaciones] ([HabitacionID])
GO
ALTER TABLE [dbo].[Servicios_Habitacion] CHECK CONSTRAINT [FK_ServiciosHabitacion_Habitaciones]
GO
ALTER TABLE [dbo].[Servicios_Habitacion]  WITH CHECK ADD  CONSTRAINT [FK_ServiciosHabitacion_Servicios] FOREIGN KEY([ServicioID])
REFERENCES [dbo].[Servicios] ([ServicioID])
GO
ALTER TABLE [dbo].[Servicios_Habitacion] CHECK CONSTRAINT [FK_ServiciosHabitacion_Servicios]
GO
USE [master]
GO
ALTER DATABASE [tpBD] SET  READ_WRITE 
GO
